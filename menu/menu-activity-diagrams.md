# Restaurant Menu Management Activity Diagrams

These diagrams describe the intended application behavior.
The midterm prototype does not save data.

## UC-M1 Create Menu Item

```mermaid
flowchart TD
	A((Start)) --> B["Administrator selects Add Menu Item"]
	B --> C["System displays empty form"]
	C --> D["Administrator selects restaurant if needed and enters item information"]
	D --> E{"Administrator action?"}
	E -->|Cancel| F["Return to restaurant menu list without saving"]
	F --> Z((End))
	E -->|Add Item| G["System validates required information and price"]
	G --> H{"Information complete and price valid?"}
	H -->|No| I["Identify missing fields or invalid price"]
	I --> D
	H -->|Yes| J["Create menu item linked to restaurant"]
	J --> K["Confirm success"]
	K --> Z
```

## UC-M2 View Menu Items and Aggregate Sentiment

```mermaid
flowchart TD
	A((Start)) --> B["Administrator opens menu directory for a restaurant"]
	B --> C{"Any menu items available?"}
	C -->|No| D["Display empty-menu message and Add Menu Item link"]
	D --> Z((End))
	C -->|Yes| E["Display menu items, categories, prices, statuses, and item sentiment scores"]
	E --> F["Calculate and display restaurant aggregate sentiment from associated item reviews"]
	F --> G["Administrator selects a menu item"]
	G --> H{"Selected menu item exists?"}
	H -->|No| I["Display not-found message and menu directory link"]
	I --> Z
	H -->|Yes| J["Display item details, average rating, and review options"]
	J --> K{"Administrator action?"}
	K -->|View Reviews| L["Display item reviews"]
	L --> J
	K -->|Back to Menu| M["Display restaurant menu directory"]
	K -->|Edit Item| N["Continue to UC-M3 Update Menu Item"]
	K -->|Remove/Discontinue Item| O["Continue to UC-M4 Remove/Discontinue Menu Item"]
	M --> Z
	N --> Z
	O --> Z
```

## UC-M3 Update Menu Item

```mermaid
flowchart TD
	A((Start)) --> B["Administrator selects Edit for a menu item"]
	B --> C{"Menu item exists?"}
	C -->|No| D["Display not-found message and menu list link"]
	D --> Z((End))
	C -->|Yes| E["Display edit form with current item details"]
	E --> F["Administrator edits item details or moderated review text and ratings"]
	F --> G{"Administrator action?"}
	G -->|Cancel| H["Return to item details without saving changes"]
	H --> Z
	G -->|Save Changes| I["System validates updated information"]
	I --> J{"Required information valid?"}
	J -->|No| K["Identify missing or invalid fields"]
	K --> F
	J -->|Yes| L["Save updated item and review information"]
	L --> M{"Were ratings modified?"}
	M -->|Yes| N["Recalculate item and restaurant aggregate sentiment scores"]
	M -->|No| O["Keep existing sentiment scores"]
	N --> P["Confirm success and display updated item details"]
	O --> P
	P --> Z
```

## UC-M4 Remove/Discontinue Menu Item

```mermaid
flowchart TD
	A((Start)) --> B["Administrator selects Remove or Discontinue Item"]
	B --> C{"Item already discontinued?"}
	C -->|Yes| D["Display already-discontinued message without changes"]
	D --> Z((End))
	C -->|No| E["Ask administrator to confirm discontinuation"]
	E --> F{"Administrator confirms?"}
	F -->|No| G["Return to item details without changes"]
	G --> Z
	F -->|Yes| H["Set item status to Discontinued while preserving historical reviews and ratings"]
	H --> I{"Discontinuation successful?"}
	I -->|No| J["Display error and leave item active"]
	J --> Z
	I -->|Yes| K["Hide item from active public menu"]
	K --> L["Confirm success and display Discontinued status"]
	L --> Z
```
