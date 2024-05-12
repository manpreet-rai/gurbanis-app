
# Granth Sahib - Gurbani Search

## Search text among Sri Guru Granth Sahib and other religious books. Also REST API built-in.
It also allows Nitnem (daily prayers) and Live radio feed from Sri Darbar Sahib, Amritsar.

This repository contains source code for my app [Granth Sahib](https://granthsahib.in).

### Frontend GUI
![Granth Sahib](https://github.com/manpreet-rai/gurbanis-app/assets/149692162/28ca1906-e1c7-4bef-8f7b-7e1a2fdadd6e)

### Backend API
![Granth Sahib API](https://github.com/manpreet-rai/gurbanis-app/assets/149692162/3b5cfb92-81f8-488f-872a-8e48a49009fb)

### API Routes
**/api/find/{type}/{query}**
 - type => gurmukhi | english | devanagari
 - query => first letters

**/api/hukamnama/{date}**
 - date => today | dd-mm-yyyy

**/api/{type}/{ids}**
 - type => ang | angs | line | lines | shabad | shabads
 - ids => ang -> 1-1430 | line -> 1-60399 | shabad -> 0-4238
    
## Technologies Used:
### Frontend
 - TailwindCSS (CSS)
 
### Backend
 - Laravel
 - PHP

Source code available for audit only. &copy; 2023 Manpreet Rai. All rights reserved.
