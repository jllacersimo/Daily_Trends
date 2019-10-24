CREATE TABLE users(
    id              int(255) auto_increment not null,
    name            varchar(100),
    email           varchar(255),
    password        varchar(255),
    CONSTRAINT pk_user PRIMARY KEY(id)
)ENGINE=InnoDb;


CREATE TABLE feeds(
    id              int(255) auto_increment not null,
    title           varchar(255),
    body            varchar(255),
    imagen          varchar(255),
    source          varchar(255),
    user_id         int(255),
    date            date,
    CONSTRAINT pk_feeds PRIMARY KEY(id),
    CONSTRAINT fk_feeds_users FOREIGN KEY(user_id) REFERENCES users(id)
)ENGINE=InnoDb;

CREATE TABLE favorites(
    id              int(255) auto_increment not null,
    user_id    int(255),
    feed_id         int(255),
    CONSTRAINT pk_favorites PRIMARY KEY(id),
    CONSTRAINT fk_favorites_users FOREIGN KEY(user_id) REFERENCES users(id),
    CONSTRAINT fk_favorites_feeds FOREIGN KEY(feed_id) REFERENCES feeds(id)
)ENGINE=InnoDb;