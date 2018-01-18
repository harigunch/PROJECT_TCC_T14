FROM mysql:5.6

COPY Tokol-master/cv_db.sql /docker-entrypoint-initdb.d/