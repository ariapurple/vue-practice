# SSL guardian

This is a Letsencrypt(Free SSL cert) related code. 

## Get started


### Start with docker reverse proxy
* Start

        docker-compose -f proxy.yml up -d

    Current state on production server:

        `./start_proxy.sh`

* Stop

        docker-compose -f proxy.yml down

### Manual (cron deamon)
If you need acme.sh to schedule and renew certs only

        docker-compose -f acme.yml up -d

Stop acme.sh deamon

        docker-compose -f acme.yml down

### Basic Auth
If you need basic auth to vhost

	htpasswd {vhost} {username}

If htpasswd command not found

	sudo yum install -y httpd-tools

### Issue cert in Manual mode
Update your API key & API Secret in `.env`
1. [Aliyun](https://github.com/Neilpang/acme.sh/tree/master/dnsapi#11-use-aliyun-domain-api-to-automatically-issue-cert)
2. [Cloudflare](https://github.com/Neilpang/acme.sh/tree/master/dnsapi#1-use-cloudflare-domain-api-to-automatically-issue-cert)
