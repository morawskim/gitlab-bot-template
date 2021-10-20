terraform {
  required_providers {
    gitlab = {
      source  = "gitlabhq/gitlab"
      version = "3.7.0"
    }
    random = {
      source  = "hashicorp/random"
      version = "3.1.0"
    }
  }
}

variable "gitlab_token" {}
variable "webhook_url" {
  type    = string
  default = "https://example.com/hook/example"
}

provider "gitlab" {
  token    = var.gitlab_token
  #base_url = "https://gitlab.example.com/api/v4/"
}

resource "gitlab_project" "gitlab_bot" {
  name        = "gitlab_bot_test"
  description = "Gitlab bot test"

  visibility_level                                 = "private"
  merge_method                                     = "ff"
  only_allow_merge_if_all_discussions_are_resolved = true
  only_allow_merge_if_pipeline_succeeds            = true
}

resource "random_password" "webhook_token" {
  length  = 16
  special = false
}

resource "gitlab_project_hook" "example" {
  project               = gitlab_project.gitlab_bot.path_with_namespace
  url                   = var.webhook_url
  token                 = random_password.webhook_token.result
  note_events           = true
  merge_requests_events = true
}
