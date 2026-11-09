# Restaurant Menu Item Management Use Cases

## UC-M1 Create Menu Item

Actor: Administrator

Goal: Add a new menu item linked to a specific restaurant.

Preconditions:
- The administrator is authorized to manage restaurant menu items.
- The parent restaurant profile exists.
- The administrator has opened the menu management interface for the target restaurant.

Trigger:
- The administrator selects Add Menu Item.

Main flow:
1. The system displays an empty menu item form with Available status selected.
2. The administrator selects the parent restaurant (if not pre-selected) and enters the item name, category, price, description, and optional dietary tags.
3. The administrator selects Add Item.
4. The system validates the entered information.
5. The system creates the menu item record linked to the restaurant and confirms success.

Alternative flows:
- Missing required information: The system identifies the missing fields (e.g., item name, valid price) and prompts the administrator to complete them.
- Invalid price format: The system alerts the administrator to provide a valid non-negative numerical value.
- Cancel: The administrator returns to the restaurant's menu list without creating an item.

Postcondition:
- A new menu item is associated with the specified restaurant and available for public viewing and review submission.

Midterm prototype behavior:
- The form displays the proposed fields and uses browser validation for required inputs.
- Submitting a valid form displays: "Prototype preview: no menu item was saved."
- No database record is created.
- Cancel returns to the menu item directory.

Related wireframe:
- Add Menu Item

Related page:
- menu/add.php

## UC-M2 View Menu Items, and Aggregate Sentiment

Actor: Administrator

Goal: Browse a restaurant’s menu items, inspect item-level reviews, and review aggregate sentiment scores calculated from food item ratings.

Preconditions:
- The administrator is authorized to manage restaurant menu items.
- The parent restaurant profile exists.

Trigger:
- The administrator opens the menu directory for a specific restaurant or selects View Menu.

Main flow:
1. The system displays a list of menu items for the restaurant along with item categories, prices, statuses, and their individual sentiment rating scores.
2. The system calculates and displays the aggregate overall sentiment score for the restaurant by averaging all ratings and reviews tied to its associated menu items.
3. The system displays the selected item’s name, price, category, average rating and gives the administrator the option to view item reviews, edit the menu item or delete the menu item.
4. The administrator reviews the information.
5. The administrator selects Back to Menu.
6. The system returns to the restaurant menu directory.

Alternative flows:
- No menu items exist: The system displays a message indicating no items are listed for the restaurant and provides an Add Menu Item link.
- Menu item not found: The system displays an error message and a link back to the menu directory.
- Edit item: The administrator selects Edit Item to begin UC-M3.
- Discontinue item: The administrator selects Remove/Discontinue Item to begin UC-M4.

Postcondition:
- The administrator has reviewed the menu structure, individual item feedback, and calculated aggregate sentiment metrics.
- No database values are changed.

Midterm prototype behavior:
- Displays sample menu items (e.g., "Signature Truffle Burger") linked to sample Restaurant ID #5.
- Displays static average sentiment scores and pre-populated mock customer reviews.
- Back to Menu returns to the sample menu list.
- Dynamic aggregation calculation and missing-item error states are planned for the final release.

Related wireframes:
- Menu Item Directory


Related pages:

- menu/index.php
- menu/view.php

## UC-M3 Update Menu Item

Actor: Administrator

Goal: Update an existing menu item’s details or manage review text/ratings tied to the item.

Preconditions:

- The administrator is authorized to manage restaurant menu items.
- The target menu item exists.

Trigger:
- The administrator selects Edit from the menu directory or Edit Item from the item details page.

Main flow:
1. The system displays an edit form prefilled with the menu item’s current details (name, category, price, description, status).
2. The administrator modifies one or more fields or updates moderated review entries/ratings.
3. The administrator selects Save Changes.
4. The system validates the updated information.
5. The system saves the changes and recalculates the item and restaurant aggregate sentiment scores if ratings were modified.
6. The system confirms success and displays the updated item details.

Alternative flows:
- Missing required information: The system flags missing or invalid fields and prompts the administrator to correct them.
- Cancel: The administrator returns to the menu item details page without saving changes.
- Menu item not found: The system displays an error message and a link back to the menu list.

Postcondition:
- The menu item record contains the validated changes.
- If ratings/reviews were edited, updated sentiment aggregation scores reflect the changes.
- If canceled, the item details remain unchanged.

Midterm prototype behavior:
- The edit form is prefilled with sample item information (e.g., "Signature Truffle Burger").
- Submitting a valid form displays: "Prototype preview: your changes were not saved."
- Refreshing the page restores original sample data.
- Cancel returns to the menu item details page.

Related wireframe:
- Edit Menu Item

Related page:
- menu/edit.php

## UC-M4 Remove/Discontinue Menu Item

Actor: Administrator

Goal: Remove a discontinued menu item from an active restaurant menu while preserving historical review data and sentiment calculations.

Preconditions:
- The administrator is authorized to manage restaurant menu items.
- The menu item exists and has Active/Available status.
- The administrator is viewing the menu item details or menu list.

Trigger:
- The administrator selects Remove Item or Discontinue Item.

Main flow:
1. The system prompts the administrator to confirm the removal/discontinuation action.
2. The administrator confirms.
3. The system changes the item's status to Discontinued/Archived, hiding it from the active public menu.
4. The system preserves all historical customer reviews, ratings, and past sentiment contributions associated with the item.
5. The system confirms success and displays the updated status.

Alternative flows:
- Cancel confirmation: The item remains active on the menu.
- Already discontinued: The system indicates the item is already archived/discontinued and makes no change.
- Removal fails: The system displays an error notification and leaves the item active.

Postcondition:
- The menu item is hidden from active public ordering/listing.
- Historical review entries and ratings remain safely linked in the system for historical sentiment reporting.

Midterm prototype behavior:
- The menu item details page displays a Remove button.
- A visible note explains that the button does not alter stored data in the prototype.
- Clicking the button does not prompt confirmation or modify item state.
- Permanent archival and historical review retention are planned behavior for the final release.

Related wireframes:
- Remove Menu Item


Related page:
- menu/delete.php