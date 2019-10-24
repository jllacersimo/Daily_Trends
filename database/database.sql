CREATE DATABASE daily_trends;
Use daily_trends;

CREATE TABLE publishers(
    id              int(255) auto_increment not null,
    name            varchar(100),
    email           varchar(255),
    password        varchar(255),
    id_feed         int(255),
    date            date,
    CONSTRAINT pk_publisher PRIMARY KEY(id)
)ENGINE=InnoDb;

CREATE TABLE  images(
    id              int(255) auto_increment not null,
    publisher_id    int(255),
    image_path      varchar(255),
    date            date,
    CONSTRAINT pk_images PRIMARY KEY(id),
    CONSTRAINT fk_images_publishers FOREIGN KEY(publisher_id) REFERENCES publishers(id)
)ENGINE=InnoDb;

CREATE TABLE feeds(
    id              int(255) auto_increment not null,
    title           varchar(255),
    body            varchar(255),
    image_id        int(255),
    source          varchar(255),
    publisher_id         int(255),
    date            date,
    CONSTRAINT pk_feeds PRIMARY KEY(id),
    CONSTRAINT fk_comments_publishers FOREIGN KEY(publisher_id) REFERENCES publishers(id),
    CONSTRAINT fk_comments_images FOREIGN KEY(image_id) REFERENCES images(id)
)ENGINE=InnoDb;

CREATE TABLE favorites(
    id              int(255) auto_increment not null,
    publisher_id    int(255),
    image_id        int(255),
    date            date,
    CONSTRAINT pk_favorites PRIMARY KEY(id),
    CONSTRAINT fk_favorites_publishers FOREIGN KEY(publisher_id) REFERENCES publishers(id),
    CONSTRAINT fk_favorites_images FOREIGN KEY(image_id) REFERENCES images(id)
)ENGINE=InnoDb;