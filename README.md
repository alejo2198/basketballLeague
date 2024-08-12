# Sports Team Management App

## Introduction

This project is a Laravel-based web application designed to manage player and team data for a sports league. The application allows users to create teams and assign players to those teams, ensuring efficient management of team rosters and player information. The primary goal is to provide a seamless interface for administrators to oversee the organization of teams within a league.

## Features and Database Schema

The application offers several essential features, including:

1. **Team Management**: Users can create and manage teams with attributes such as team name, city, and year founded. Each team serves as a parent entity in the database, with players being related to their respective teams.

2. **Player Management**: The app allows users to add players to teams, capturing details like player name, position, and jersey number. Players are associated with teams in a one-to-many relationship, meaning each team can have multiple players.

### Database Schema

- **Teams Table**: 
  - **id**: Unique identifier for each team.
  - **name**: The name of the team.
  - **city**: The city where the team is based.
  - **year_founded**: The year the team was established.

- **Players Table**:
  - **id**: Unique identifier for each player.
  - **name**: The player's full name.
  - **position**: The position the player plays.
  - **jersey_number**: The player's jersey number.
  - **team_id**: Foreign key linking the player to a specific team.

The relationship between the Teams and Players tables is managed through Laravel's Eloquent ORM, enabling easy data retrieval and manipulation.

## User Flow Demo

Below are screenshots demonstrating the user flow within the application:

1. **Homepage**: [Screenshot 1]
2. **Team Creation Page**: [Screenshot 2]
3. **Player Assignment Page**: [Screenshot 3]
4. **Team Roster View**: [Screenshot 4]
5. **Tournament Bracket View**: [Screenshot 5]
6. **Game Scheduling Page**: [Screenshot 6]
7. **Admin Dashboard**: [Screenshot 7]
8. **User Profile Management**: [Screenshot 8]

*(Replace the above placeholders with actual screenshots of your application)*

## Incomplete Features

While the core functionality of managing teams and players was successfully implemented, some features were not completed due to time constraints. Specifically, I intended to implement a comprehensive tournament scheduling system that would allow for the automatic generation of game brackets and schedules based on team data. Unfortunately, due to the complexity of integrating this feature and the limited time available, I was unable to finalize it.

Additionally, I encountered challenges in implementing real-time updates for player stats during games. Integrating WebSockets for live data updates proved more complex than anticipated, and I was unable to fully implement this feature within the project timeline.

## Reflections on Laravel and Additional Learning

Working with Laravel has been an insightful experience. The framework's robust ecosystem and ease of use made developing the application enjoyable, especially with features like Eloquent ORM and Blade templating. However, I would have liked to delve deeper into Laravel's advanced features, such as event broadcasting and task scheduling. Covering these topics would have further enhanced my understanding and ability to build more complex applications.

