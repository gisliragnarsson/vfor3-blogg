CREATE TABLE blogs (
    id int not null primary key auto_increment,
    title varchar(255) not null,
    content text not null,
    author varchar(255) not null
);

INSERT INTO blogs (title, content, author) VALUES
("Lorem Ipsum", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pulvinar, tellus in varius vehicula, felis ligula placerat mauris, vel egestas nisi est vel odio. Phasellus sed sagittis quam. Duis et hendrerit felis. Ut elementum efficitur faucibus. Nulla eu nunc eu enim egestas varius vel a dolor. Phasellus in augue non turpis volutpat rhoncus. Nunc id vulputate sem. In quis magna quis velit volutpat vehicula sit amet quis lectus. Pellentesque bibendum, velit eu facilisis lacinia, leo elit pulvinar felis, vitae tristique urna massa non odio. Duis euismod scelerisque ex. Nulla pretium odio feugiat nisl feugiat, vitae consequat tortor auctor. Aliquam erat volutpat. Vestibulum erat nibh, finibus nec augue vitae, rutrum pharetra mauris. Integer aliquet congue lorem eget sagittis.", "Jón Jónsson"),
("Dolor Sit Amet", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae tempus leo. Praesent dolor enim, dictum id lectus nec, auctor porttitor nulla. In tempus fermentum nisl porta interdum. Nulla lacus nunc, aliquet non rhoncus et, porta sit amet justo. Mauris nisi diam, rutrum quis luctus at, sagittis sit amet nisi. Nulla facilisi. Nam tellus elit, lobortis id hendrerit eget, auctor ut eros. Nam quis malesuada dolor, at pellentesque erat. Aenean auctor ullamcorper fringilla. Praesent a risus et neque facilisis suscipit id at nulla. Vivamus purus nunc, gravida et lacus et, faucibus sodales nibh. Sed mattis sed arcu non scelerisque.", "Jón Jónsson"),
("Consectetur", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque facilisis urna in ipsum aliquet tincidunt. Nam aliquet leo vel neque feugiat, quis posuere magna fringilla. Ut dapibus nulla commodo velit lobortis consectetur. Nulla quis commodo orci. Ut tempor, elit sed tempus sollicitudin, urna ipsum elementum sem, at pellentesque eros orci non elit. Sed pulvinar volutpat luctus. Mauris dictum cursus odio, non aliquam sapien pharetra et. Duis pharetra vel tortor quis luctus. Aenean pellentesque, arcu tempus convallis posuere, enim velit hendrerit urna, non aliquet elit nisl in dui. Aenean rutrum sollicitudin lectus eget dictum. Donec in massa efficitur, vulputate odio vel, cursus urna. Integer ac bibendum eros, sit amet sodales arcu. Nulla non lorem dui.", "Jón Jónsson");

CREATE TABLE comments (
    id int not null primary key auto_increment,
    author varchar(255) not null,
    content text,
    likes int not null,
    blog_id int not null,
    FOREIGN KEY (blog_id) REFERENCES blogs(id)
);

INSERT INTO comments (author, content, likes, blog_id) VALUES
("John Doe", "Just some random comment", 0, 1),
("Jane Doe", "Another random comment", 0, 2),
("Chris Doe", "Commenting just to comment", 0, 3);