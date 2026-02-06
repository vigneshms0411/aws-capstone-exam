
variable "aws_region" {
  default = "us-east-1"
}

variable "vpc_cidr" {
  default = "10.0.0.0/16"
}

variable "db_username" {
  default = "admin"
  sensitive = true
}

variable "db_password" {
  default = "StreamLine2024!"
  sensitive = true
}

variable "your_ip" {
  description = "Your IP address for SSH access"
  default     = "0.0.0.0/0"  # Change to your actual IP/32
}
