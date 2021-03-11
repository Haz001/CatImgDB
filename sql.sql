CREATE DATABASE imgdb;
USE imgdb;
CREATE TABLE catimg( /*this makes the table that stores the images*/
	uid CHAR(16) NOT NULL PRIMARY KEY, /*made with PHP `uniqid("cat")`, don't change length*/
    url VARCHAR(2000) NOT NULL, /*URL of image*/
    title VARCHAR(128) NOT NULL, /*Title of image, length may be changed*/
    cute INTEGER, /*likes of image, may be replaced by relationship table*/
    notcute INTEGER /*dislikes of image, may be replaced by relationship table*/
);

/*These are some Unsplash images I have chosen to prepopulate the DB*/
INSERT INTO catimg VALUES ('cat0','https://images.unsplash.com/photo-1529778873920-4da4926a72c2','Whats that',0,0);
INSERT INTO catimg VALUES ('cat1','https://images.unsplash.com/photo-1566458226966-5d1efe19e4b7','Hello',0,0);
INSERT INTO catimg VALUES ('cat2','https://images.unsplash.com/photo-1574144611937-0df059b5ef3e','Yawn',0,0);

