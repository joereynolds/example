# Example application

## What does it do?

Renders a list of users from https://jsonplaceholder.typicode.com/users

Contains the following:

- Use of Zend Expressive
- A basic PSR-15 middleware component (See `src/App/src/Middleware/TextLoggerMiddleware.php`)
- Example BEM HTML + CSS layouts (See `assets/style.css`)
- Use of an external JSON api (See `src/App/src/Service/UserService.php`)
- Twig templating using inheritance and content blocks 
  (See `src/App/templates/app/home-page.html.twig` and
  `src/App/templates/app/profile.html.twig`)

  ## Screenshot

  ![Imgur](https://i.imgur.com/t9wowre.jpg)



