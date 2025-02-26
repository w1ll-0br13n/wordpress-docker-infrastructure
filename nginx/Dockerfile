FROM nginx:alpine

# Install bash and envsubst
RUN apk add --no-cache bash gettext dos2unix

# Copy templates and entrypoint script
COPY templates/*.template /etc/nginx/templates/
COPY entrypoint.sh /docker-entrypoint.d/
RUN dos2unix /docker-entrypoint.d/entrypoint.sh

# Set permissions
RUN chmod +x /docker-entrypoint.d/entrypoint.sh

# Set entrypoint
ENTRYPOINT ["/docker-entrypoint.d/entrypoint.sh"]