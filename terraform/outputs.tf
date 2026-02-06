output "vpc_id" {
  value = aws_vpc.streamline_vpc.id
}

output "alb_dns_name" {
  value = aws_lb.app_lb.dns_name
}

output "rds_endpoint" {
  value = aws_db_instance.streamline_db.endpoint
}

output "web_server_1_ip" {
  value = aws_instance.web_server_1.public_ip
}

output "web_server_2_ip" {
  value = aws_instance.web_server_2.public_ip
}
