FROM nginx:latest

#
# certbot-auto
#
RUN apt-get update && \
    apt-get install -y vim wget cron rsyslog && \
    wget https://dl.eff.org/certbot-auto && chmod a+x certbot-auto && \
    mkdir -p /etc/certbot/ && \
    mv certbot-auto /etc/certbot/

COPY conf/ /
