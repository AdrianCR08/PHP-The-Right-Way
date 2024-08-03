CREATE TABLE projects
(
    id    INT AUTO_INCREMENT NOT NULL,
    name  VARCHAR(100) NOT NULL,
    image VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
);
ALTER TABLE
    projects
    ADD
        COLUMN description TEXT;

INSERT INTO projects(name, image, description)
VALUES ('Website', 'photos/website.jpeg', 'A website project');

SELECT *
FROM projects;