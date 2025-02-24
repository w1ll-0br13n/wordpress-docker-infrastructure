FROM nginx:alpine

# Install bash and envsubst
RUN apk add --no-cache bash gettext

# Copy templates and entrypoint script
COPY templates/*.template /etc/nginx/templates/
COPY entrypoint.sh /docker-entrypoint.d/

# Set permissions
RUN chmod +x /docker-entrypoint.d/entrypoint.sh

# Set entrypoint
ENTRYPOINT ["/docker-entrypoint.d/entrypoint.sh"]