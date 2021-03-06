<p>
        <b>Home:</b>
        <br />
        ●	Search Games Table
        <br />
        ○	gameTitle
        <br />
        ○	gameGenre
        <br />
        ○	Date Added to Site
        <br />
        ●	List Top 5 Games
        <br />
        ○	By default homepage shows a list of the top 5 user rated games
        <br />
        ●	Add Button
        <br />
        ○	Takes you to AddGame Page
        <br /><br />
    
        <b>Sign Up:</b>
        <br />
        ●	Insert into User Table
        <br />
        ○	UserID(auto generated)
        <br />
        ○	email
        <br />
        ○	Username
        <br />
        ○	Password
        <br />
        ■	Confirm password before inserting into User Table
        <br /><br />
    
        <b>Sign In:</b>
        <br />
        ●	Search User Table
        <br />
        ○	Email
        <br />
        ○	Password
        <br />
        ■	If email and password are equal to one in our table the user will be logged in
        <br /><br />
    
        Add Game:
        <br />
        ●	Insert into Games Table
        <br />
        ○	GameID(auto generated)
        <br />
        ○	gameTitle
        <br />
        ○	Developer
        <br />
        ○	Genre
        <br />
        ○	ESRB
        <br />
        ○	Franchise
        <br />
        ○	Price
        <br />
        ○	releaseDate
        <br />
        ○	dateAdded(auto generated)
        <br />
        ○	Description
        <br />
        ■	When add is clicked the information gets inserted into our table if the title does not exist
        <br /><br />
    
        <b>Select Game:</b>
        <br />
        ●	Pull information from Game Table by game ID
        <br />
        ○	GameID
        <br />
        ○	gameTitle
        <br />
        ○	Developer
        <br />
        ○	Genre
        <br />
        ○	ESRB
        <br />
        ○	Franchise
        <br />
        ○	Price
        <br />
        ○	releaseDate
        <br />
        ○	Description
        <br />
        ■	When user clicks specific game that games information gets pulled and shown
        <br />
        ●	If user is an admin, user can update and delete games
        <br />
        ●	Update Game:
        <br />
        ○	gameTitle
        <br />
        ○	Developer
        <br />
        ○	Genre
        <br />
        ○	ESRB
        <br />
        ○	Franchise
        <br />
        ○	Price
        <br />
        ○	releaseDate
        <br />
        ○	Description
        <br />
        ■	Admins can click the update button to update the fields based on game ID
        <br />
        ●	Delete Game:
        <br />
        ○	GameID
        <br />
        ■	Admins can click the delete button to delete a game by its ID
        <br />
    
        <b>Add Review:</b>
        <br />
        ○	Allows for a user who is logged in to write a review for a game and give a rating from 1-10
        <br />
        ■	Stores info into Review Table under:
        <br />
        ●	ReviewID
        <br />
        ●	GameID
        <br />
        ●	UserID
        <br />
        ●	RatingScore
        <br />
        ●	Review
        <br /><br />
        <b>JN GameBase Logo:</b>
        <br />
        ●	When clicked, takes the user back to the homepage
        <br />
    </p>