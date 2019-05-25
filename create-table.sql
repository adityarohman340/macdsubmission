create table [dbo].[User](
    id INT NOT NULL IDENTITY(1,1) PRIMARY KEY(id),
    name VARCHAR(30),
    email VARCHAR(30),
    jobs VARCHAR(30),
    date DATE
)