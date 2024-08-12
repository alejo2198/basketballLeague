# Basketball League

## Introduction

This project is a Laravel-based web application to manage player and team data for a basketball league. The application allows users to create teams and assign players to those teams, ensuring efficient management of team rosters and player information. The primary goal is to provide a seamless interface for administrators to oversee the organization of teams within a league. The secondary goal is to have a public interface where guest users can see all the players and teams.

## Features and Database Schema

The application offers several essential features, including:

1. **Team Management**: Users can create and manage teams with attributes such as city, nickname, team abbreviation, and year founded. Each team serves as a parent entity in the database, with players related to their respective teams.

2. **Player Management**: The app allows users to add players to teams, capturing details like player's first and last names and their team data. Players are associated with teams in a one-to-many relationship, meaning each team can have multiple players.

### Database Schema

- **Teams Table**: 
  - **id**: Unique identifier for each team.
  - **nickname**: The name of the team.
  - **city**: The city where the team is based.
  - **abbreviation**: The city where the team is based.
  - **year_founded**: The year the team was established.

- **Players Table**:
  - **id**: Unique identifier for each player.
  - **fname**: The player's first name.
  - **lname**: The player's last name.
  - **team_id**: Foreign key linking the player to a specific team.

The relationship between the Teams and Players tables is managed through Laravel's Eloquent ORM.
Additionally, the backend infrastructure does capture timestamps for deleted_at and updated_at with restore,trash and destroy capabilities.

## User Flow Demo

Below are screenshots demonstrating the user flow within the application:

1. **Homepage**: [Screenshot 1![Screen Shot 2024-08-12 at 6 10 23 PM](https://github.com/user-attachments/assets/617cdc6c-1c14-469b-a39c-56c9425fcf30)
]
2. **Team Public Page**: [Screenshot 2]
3. **Register and Login**: [Screenshot 3]
4. **Dashboard**: [Screenshot 4]
5. **Player CRUD**: [Screenshot 5]
6. **Team CRUD**: [Screenshot 6]

## Incomplete Features

While the core functionality of managing teams and players was successfully implemented, some features were not completed due to time constraints. Mainly I would have liked to complete the UI necessary for trashing, and restoring. Since the backend was complete for it

## Reflections on Laravel and Additional Learning

I like working with Laravel. It's a very intuitive framework that allows you to create entire CRUD applications quite quickly. I am excited to use it in tandem with REACT.

