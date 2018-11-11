-- CREATE TAGS TABLE ('venue.create' / tags.create')(ADMIN FOR NOW/ LATER OWNER):
-- ID: AI
-- 

-- TAGS READ ('tags.index') (API/tags)
-- <SELECT><OPTION VALUE={{ $location->id }}>{{ $location->name }}</OPTION>
-- WILL LIST ALL THE POSSIBLE CHECKBOXES

--- VENUES READ (API/venues/filter)
---   

-- render() {
--     return (
--       <div className="venue-list">
--         <div className="venue-list-items">
--           { this.state.items.map(
--               item => <VenueListItem 
--                 key={item.id}

--                 name={item.name} 
--                 description={item.description}
--                 location={item.location_id} OR {item.location}
--                 nighttype={item.nightype_id} OR {item.nighttype}
--                 venuetype={item.venuetype_id} OR {item.venutype}
--               />
--             )
--           }

--FILTER
SELECT * 
FROM venues --will list ll of these in render({item.id}{item.description}{item.location_id from `locations table` })
LEFT JOIN tag_venue
ON venues.id = tag_venue.venue_id

-- SORT: LOCATION.ID
SELECT *
FROM venues
LEFT JOIN tag_venue
ON venues.id = tag_venue.venue_id
-- AND ON venues.location.id = 
ORDER BY venues.location_id;

-- SORT: ALPHABETICALLY
SELECT *
FROM venues
LEFT JOIN tag_venue
ON venues.id = tag_venue.venue_id
ORDER BY venues.name ASC;




---------


-- DATA CREATE

-- A) CATEGORIES Table

INSERT INTO `categories`( `name`) VALUES ('Attribute'), ('Night Type'), ('Venue Type'), ('Features'), ('Openings'), ('Closings'), ('Location'), ('Budget'), ('Offers'), ('Music Type'), ('Cuisine') ;

-- 1) VENUE TYPES:

INSERT INTO `tags`(`name`, `category_id`) VALUES ('Bar Crawl',2),('Brewery',2), ('Cocktail Bar',2), ('Gastro Pub ',2),('Lounge Bar',2),('Night Club',2),('Party Bar',2),('Restuarant',2),('Restaurant Bar',2), ('Sisha Bar',2), ('Wine Bar',2) ;

-- 2) NIGHT TYPES:
INSERT INTO `tags`(`name`, `category_id`) VALUES ('After Work Drinks',3),('Business Meeting',3), ('Boys in Town',3), ('Chat with the Besties ',3),('Chill and Enjoy',3),('Clubing',3),('Date Night',3),('Drink and Munch',3),('Eat Out',3), ('LGBT Fun',3), ('Private Event',3), ('Stays in Vegas',3), ('Stag/ Hen Do',3)  ;





