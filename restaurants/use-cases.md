# Restaurant Management Use Cases

## UC-R1 Create Restaurant

Actor: Administrator

Goal: Add a restaurant profile to the directory.

Preconditions:
- The administrator is authorized to manage restaurants.
- The administrator has opened the restaurant directory.

Trigger:
- The administrator selects Add Restaurant.

Main flow:
1. The system displays an empty restaurant form with Active selected.
2. The administrator enters the restaurant name, category/cuisine,
   address, optional phone, and optional description.
3. The administrator selects a status.
4. The administrator selects Add Restaurant.
5. The system validates the entered information.
6. The system creates the restaurant profile and confirms success.

Alternative flows:
- Missing required information: the system identifies the missing
  fields and asks the administrator to complete them.
- Cancel: the administrator returns to the directory without
  creating a restaurant.

Postcondition:
- A new restaurant profile exists with the submitted information.

Midterm prototype behavior:
- The form displays the proposed fields and uses browser validation
  for required information.
- Submitting a valid form displays:
  "Prototype preview: no restaurant was saved."
- No database record is created.
- Cancel returns to the restaurant directory.

Related wireframe:
- Add Restaurant

Related page:
- restaurants/add.php

## UC-R2 View Restaurants and Restaurant Details

Actor: Administrator

Goal: Browse the restaurant directory and view a restaurant’s profile.

Preconditions:
- The administrator is authorized to manage restaurants.
- At least one restaurant profile exists.

Trigger:
- The administrator opens the restaurant directory.

Main flow:
1. The system displays restaurant names, cuisines, statuses,
   and View and Edit links.
2. The administrator selects View for a restaurant.
3. The system displays the selected restaurant’s name, cuisine,
   phone, address, description, and status.
4. The administrator reviews the profile.
5. The administrator selects Back to Restaurants.
6. The system displays the restaurant directory.

Alternative flows:
- Empty directory: the system displays a message that no restaurants
  are available and provides an Add Restaurant link.
- Restaurant not found: the system displays a helpful message
  and a link back to the directory.
- Edit: the administrator selects Edit Restaurant to begin UC-R3.
- Archive: the administrator selects Archive Restaurant to begin UC-R4.

Postcondition:
- The administrator has viewed restaurant information.
- No restaurant information has changed.

Midterm prototype behavior:
- The directory displays one fictional restaurant, Canyon Kitchen.
- View opens a static details page for that sample restaurant.
- Back to Restaurants returns to the directory.
- Empty-directory and restaurant-not-found states are planned
  behavior and are not implemented in this prototype.

Related wireframes:
- Restaurant Directory
- Restaurant Details

Related pages:
- restaurants/index.php
- restaurants/view.php?id=1

## UC-R3 Update Restaurant

Actor: Administrator

Goal: Update an existing restaurant’s profile information.

Preconditions:
- The administrator is authorized to manage restaurants.
- The restaurant profile exists.

Trigger:
- The administrator selects Edit from the directory or
  Edit Restaurant from the details page.

Main flow:
1. The system displays an edit form prefilled with the
   restaurant’s current information.
2. The administrator changes one or more fields.
3. The administrator selects Save Changes.
4. The system validates the entered information.
5. The system saves the updated profile.
6. The system confirms success and displays the updated details.

Alternative flows:
- Missing required information: the system identifies the missing
  fields and asks the administrator to complete them.
- Cancel: the administrator returns to the restaurant details
  without saving changes.
- Restaurant not found: the system displays a helpful message
  and a link back to the directory.

Postcondition:
- The restaurant profile contains the validated changes.
- If the administrator cancels, the profile remains unchanged.

Midterm prototype behavior:
- The edit form is prefilled with Canyon Kitchen’s sample information.
- Required fields use browser validation.
- Submitting a valid form displays:
  "Prototype preview: your changes were not saved."
- Refreshing the page restores the original sample information.
- Cancel returns to Canyon Kitchen’s details page.
- Database updates and restaurant-not-found handling are not
  implemented in this prototype.

Related wireframe:
- Edit Restaurant

Related page:
- restaurants/edit.php?id=1

## UC-R4 Archive Restaurant

Actor: Administrator

Goal: Remove a restaurant from public listings while preserving
its profile, menu items, and historical reviews.

Preconditions:
- The administrator is authorized to manage restaurants.
- The restaurant exists and has Active status.
- The administrator is viewing the restaurant’s details.

Trigger:
- The administrator selects Archive Restaurant.

Main flow:
1. The system asks the administrator to confirm the archive action.
2. The administrator confirms.
3. The system changes the restaurant’s status to Archived.
4. The system preserves the restaurant’s associated menu items
   and reviews.
5. The system confirms success and displays the updated status.
6. The restaurant no longer appears in public listings.

Alternative flows:
- Cancel confirmation: the restaurant remains Active.
- Already archived: the system indicates that the restaurant
  is already archived and makes no further change.
- Archive fails: the system displays an error and does not
  report success.

Postcondition:
- The restaurant is Archived and hidden from public listings.
- Its profile, menu items, and reviews remain stored.
- If canceled, the restaurant remains unchanged.

Midterm prototype behavior:
- The restaurant details page displays an Archive Restaurant button.
- A visible note explains that the button does not save changes.
- The button does not open a confirmation or change the status.
- Confirmation, persistence, and public-listing changes are
  planned behavior for the final application.

Related wireframe:
- Restaurant Details

Related page:
- restaurants/view.php?id=1