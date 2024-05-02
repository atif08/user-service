
# User Service 

User Microservice use to send data to notification Service using message bus


## Installation

Install my-project with npm

```bash
git clone  https://github.com/atif08/user-service.git
cd users-service
composer install
symfony server:start
docker-compose up

```
    
## Usage/Examples

```javascript
Send a POST request to the /users endpoint with the following JSON payload:


{
  "email": "example@example.com",
  "firstName": "John",
  "lastName": "Doe"
}
curl -X POST http://localhost:8000/users -H "Content-Type: application/json" -d '{"email": "example@example.com", "firstName": "John", "lastName": "Doe"}'

```

