# Restaurant Management Activity Diagrams

These diagrams describe the intended application behavior.
The midterm prototype does not save data.

## UC-R1 Create Restaurant

```mermaid
flowchart TD
    A((Start)) --> B["Administrator selects Add Restaurant"]
    B --> C["System displays empty form with Active selected"]
    C --> D["Administrator enters restaurant information"]
    D --> E{"Administrator action?"}
    E -->|Cancel| F["Return to restaurant directory without saving"]
    F --> Z((End))
    E -->|Add Restaurant| G["System validates information"]
    G --> H{"Required information complete?"}
    H -->|No| I["Identify missing fields"]
    I --> D
    H -->|Yes| J["Create restaurant profile"]
    J --> K["Confirm success"]
    K --> Z
```

## UC-R2 View Restaurants and Restaurant Details

```mermaid
flowchart TD
    A((Start)) --> B["Administrator opens restaurant directory"]
    B --> C{"Any restaurants available?"}
    C -->|No| D["Display empty-directory message and Add Restaurant link"]
    D --> Z((End))
    C -->|Yes| E["Display restaurant names, cuisines, statuses, and actions"]
    E --> F["Administrator selects View"]
    F --> G{"Selected restaurant exists?"}
    G -->|No| H["Display not-found message and directory link"]
    H --> I["Administrator returns to directory"]
    I --> Z
    G -->|Yes| J["Display restaurant profile"]
    J --> K{"Administrator action?"}
    K -->|Back to Restaurants| L["Display restaurant directory"]
    K -->|Edit Restaurant| M["Continue to UC-R3 Update Restaurant"]
    K -->|Archive Restaurant| N["Continue to UC-R4 Archive Restaurant"]
    L --> Z
    M --> Z
    N --> Z
```

## UC-R3 Update Restaurant

```mermaid
flowchart TD
    A((Start)) --> B["Administrator selects Edit for a restaurant"]
    B --> C{"Restaurant exists?"}
    C -->|No| D["Display not-found message and directory link"]
    D --> Z((End))
    C -->|Yes| E["Display form with current restaurant information"]
    E --> F["Administrator edits information"]
    F --> G{"Administrator action?"}
    G -->|Cancel| H["Return to restaurant details without saving"]
    H --> Z
    G -->|Save Changes| I["System validates information"]
    I --> J{"Required information complete?"}
    J -->|No| K["Identify missing fields"]
    K --> F
    J -->|Yes| L["Save updated restaurant profile"]
    L --> M["Confirm success and display updated details"]
    M --> Z
```

## UC-R4 Archive Restaurant

```mermaid
flowchart TD
    A((Start)) --> B["Administrator selects Archive Restaurant"]
    B --> C{"Restaurant already archived?"}
    C -->|Yes| D["Display already-archived message without changes"]
    D --> Z((End))
    C -->|No| E["Ask administrator to confirm archive action"]
    E --> F{"Administrator confirms?"}
    F -->|No| G["Return to details without changes"]
    G --> Z
    F -->|Yes| H["Attempt to set status to Archived while preserving related data"]
    H --> I{"Archive successful?"}
    I -->|No| J["Display error without reporting success"]
    J --> Z
    I -->|Yes| K["Hide restaurant from public listings"]
    K --> L["Confirm success and display Archived status"]
    L --> Z
```