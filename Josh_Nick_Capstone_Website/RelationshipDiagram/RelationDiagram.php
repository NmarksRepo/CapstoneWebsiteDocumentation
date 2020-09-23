<p>
        <b>Games Table:</b>
        <br />
        GameID (Primary Key)
        <br />
        GameTitle
        <br />
        Developer
        <br />
        Genre
        <br />
        ESRB
        <br />
        ReleaseDate
        <br />
        Description
        <br />
        DateAdded (Takes Current Date)
        <br />
        <br />
    
        <b>Platforms Table:</b>
        PlatformID (primary key)
        <br />
        GameID (foreign key "Games")
        <br />
        PlatformName
        <br />
        Price
        <br />
        ReleaseDate
        <br />
        <br />
    
        <b>User Table:</b>
        <br />
        UserID (Primary Key)
        <br />
        Email
        <br />
        Username
        <br />
        Password
        <br />
        <br />
    
        <b>Review Table:</b>
        <br />
        ReviewID (Primary Key)
        <br />
        GameID (Foreign Key "Games")
        <br />
        UserID (Foreign Key "Users")
        <br />
        PlatformID (Foreign Key "Platforms")
        <br />
        Rating Score
        <br />
        Review
    </p>