CREATE DATABASE file_uploader;

USE file_Uploader;

CREATE TABLE files(
    id INT NOT NULL AUTO_INCREMENT,
    user VARCHAR (255),
    file VARCHAR (255),

    PRIMARY KEY (id)
);