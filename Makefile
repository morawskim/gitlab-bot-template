.PHONY: terraform

terraform:
	docker run --rm -it \
		-v $(PWD)/terraform:/terraform \
		-w/terraform \
		hashicorp/terraform:1.0.9 init
	docker run --rm -it \
		-v $(PWD)/terraform:/terraform \
		-w/terraform \
		hashicorp/terraform:1.0.9 apply -var-file="local.tfvars"

terraform-fmt:
	docker run --rm -it \
		-v $(PWD)/terraform:/terraform \
		-w/terraform \
		hashicorp/terraform:1.0.9 fmt
