FROM httpd:2.4.59

RUN sed -i \
    -e 's|^#\(LoadModule rewrite_module .*\)|\1|' \
    -e 's|^#\(LoadModule proxy_module .*\)|\1|' \
    -e 's|^#\(LoadModule proxy_fcgi_module .*\)|\1|' \
    -e 's|^#\(LoadModule auth_basic_module .*\)|\1|' \
    -e 's|^#\(LoadModule authn_file_module .*\)|\1|' \
    -e 's|^#\(LoadModule authn_core_module .*\)|\1|' \
    -e 's|^#\(LoadModule authz_core_module .*\)|\1|' \
    -e 's|^#\(LoadModule authz_user_module .*\)|\1|' \
    -e 's|^#\(LoadModule alias_module .*\)|\1|' \
    conf/httpd.conf

RUN grep -q '^LoadModule cgid_module' conf/httpd.conf || echo 'LoadModule cgid_module modules/mod_cgid.so' >> conf/httpd.conf

RUN sed -i 's|^\([[:space:]]*\)ScriptAlias /cgi-bin/|\1#ScriptAlias /cgi-bin/|' conf/httpd.conf

RUN printf '\nIncludeOptional conf/lab/*.conf\n' >> conf/httpd.conf
COPY conf/ conf/lab/

RUN htpasswd -cb conf/.htpasswd admin secret123

COPY scripts/ /var/www/scripts/
RUN chmod +x /var/www/scripts/download.cgi
