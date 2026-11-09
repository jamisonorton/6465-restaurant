## 6465-restaurant
# Craving Index

Craving Index is a restaurant review application that focuses on individual dishes. Users will be able to discover restaurants, review menu items, and follow their favorite restaurants. Administrators will manage restaurant profiles, menu items, and reviews.

This repository contains Group 11's project for IS 6465-090, Web Based Applications, Fall 2026 at the University of Utah.

## Midterm prototype

The current version demonstrates the front-end screens for two CRUD sets: restaurant management and menu item management. It also includes Home, Login, menu item details, and review screens.

The prototype uses fictional sample data and has **no database integration**. Forms demonstrate the interface and browser validation; they do not save changes. Login does not authenticate users, and administrator permissions are not enforced yet.

### Restaurant management

- List restaurants and view profile details.
- Display an empty Add Restaurant form.
- Display an Edit Restaurant form prefilled with sample information.
- Show an Archive Restaurant button. The button does not change the restaurant's status.
- Open the restaurant's menu management pages.

### Menu item management

- List sample dishes with categories, prices, and average ratings.
- Calculate the restaurant's aggregate rating from sample review arrays.
- Display Add and Edit Menu Item forms.
- Display a removal confirmation page explaining that historical reviews should be preserved.
- View sample item reviews and open Add, Edit, and Delete Review screens.

## Run the project

You need PHP and a web browser. No database setup is required for the midterm prototype.

1. Open the repository in GitHub Codespaces, or open a terminal in a local checkout.
2. From the repository root, run:

   ```bash
   php -S 0.0.0.0:8000
   ```

3. In Codespaces, open port **8000** using the **Ports** tab or the **Open in Browser** notification. When running locally, visit `http://localhost:8000`.
4. Leave the terminal running while previewing the pages. Press **Ctrl+C** to stop the server.

The shared layout loads Tailwind CSS from a CDN, so an internet connection is needed for that styling.

## Preview pages

Append these paths to your preview address:

| Screen | Path |
| --- | --- |
| Home | `/index.php` |
| Login | `/security/login.php` |
| Restaurant directory | `/restaurants/index.php` |
| Restaurant details | `/restaurants/view.php?id=1` |
| Add restaurant | `/restaurants/add.php` |
| Edit restaurant | `/restaurants/edit.php?id=1` |
| Menu directory | `/menu/index.php?restaurant_id=1` |
| Menu item details and reviews | `/menu/view.php?id=1&restaurant_id=1` |
| Add menu item | `/menu/add.php?restaurant_id=1` |
| Edit menu item | `/menu/edit.php?id=1&restaurant_id=1` |
| Remove menu item | `/menu/delete.php?id=1&restaurant_id=1` |

The item details screen links to the review forms and review deletion confirmation.

## Project structure

```text
includes/       Shared header, navigation, footer, and stylesheet
restaurants/    Restaurant pages, use case documents, and activity diagrams
menu/           Menu item and review pages, use cases, and activity diagrams
security/       Login page
index.php       Home page
PROGRESS.md     Team assignments, decisions, and progress checklist
Reflection.md  Ethics and critical thinking reflection
```

## Design documentation

- [Restaurant wireframes](craving-index-restaurant-wireframes.pdf)
- [Menu wireframes — index, add, delete, and edit](craving-index-menu-wireframes.pdf)
- [Restaurant use case documents](restaurants/use-cases.md)
- [Restaurant activity diagrams](restaurants/activity-diagrams.md)
- [Menu use case documents](menu/menu_use_cases.md)
- [Menu activity diagrams](menu/menu-activity-diagrams.md)
- [Use case diagrams](Use-Case-Diagrams.md)
- [Ethics and critical thinking reflection](Reflection.md)
- [Team progress and assignments](PROGRESS.md)

The activity diagrams describe the intended application behavior. The use case documents distinguish intended behavior from the midterm prototype; the team should review them alongside the current pages before submission.

## Prototype limitations

- Add, Edit, Remove, and review submissions display prototype messages without changing stored data. Restaurant archiving is a placeholder button.
- Item details, editing, and removal currently display the burger sample even when a different item ID is supplied. Review editing also uses fixed sample content.
- Search, category browsing, account creation, password recovery, subscriptions, and following are not functional features yet.
- Home page scores and follower counts are illustrative. Menu directory averages are calculated from the sample review arrays.
- Some shared navigation links still need integration fixes. The direct preview paths above can be used to open the implemented pages.

## Planned final application

Future development includes relational database integration, persistent CRUD operations, authentication and role checks, restaurant following, and premium restaurant placement. These are planned features, not completed midterm functionality.

## Team

- Demitri Diamant
- Teddale Simpson
- Jamison Orton
- Kyan Chase
