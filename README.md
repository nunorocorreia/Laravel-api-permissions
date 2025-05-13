# Laravel API with Authentication and Authorization

A RESTful API built with Laravel that implements authentication and authorization features.

## Features

- User authentication with Laravel Sanctum
- Token-based API security
- Standardized API responses
- Simple user management

## API Usage

### Authentication

The API uses Laravel Sanctum for authentication. To get a token:

```
POST /api/login
```

Request body:
```json
{
  "email": "user@example.com",
  "password": "password"
}
```

Response:
```json
{
  "data": {
    "token": "1|your_access_token_here"
  },
  "message": "Authenticated",
  "status": 200
}
```

Include the token in subsequent requests as a Bearer token:

```
Authorization: Bearer 1|your_access_token_here
```

To logout and invalidate the current token:

```
POST /api/logout
```

## Planned Features

- User registration
- Role-based access control
- Permission management
- Comprehensive API documentation

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
