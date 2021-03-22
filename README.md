# wp-custom-search

- This plugin can be used to add categories to wordpress posts search with post type search capabilities

- This repo has a customised adapted search form for the twentytwentyone theme

How to use

1) Copy folder wp-custom-search to wordpress plugins folder
2) Enable Plugin
3) Open the Permalinks page and enable the Post Name setting and click save changes - /wp-admin/options-permalink.php
4) Copy the rewrite code written on screen on the permalinks page to your .htaccess file
5) Copy the template/searchform.php over the file wp-content/themes/twentytwentyone/searchform.php - It has an extra input field for category_name
6) Open wordpress admin add some new products then create and use categories for standard posts and product posts
7) Test the category search on any search page using the twentytwentyone theme
