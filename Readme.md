# Testers playground    
Challenges designed to help you learn DevTools, OWASP and accessibility 

This website contains various challenges designed to help testers learn as well as challenge their current knowledge and skills.

## Preview

**[View Live Preview](http://playground.vivrichards.co.uk/)**

## Run this project locally
### Prerequisites
- Docker

1. Clone this repository `git clone git@github.com:vivrichards600/testersplayground.git`
2. Navigate to the cloned directory
3. Build the `testersplayground` docker image
```
docker build -t testers-playground:latest .
```
4. Run the newly built `testersplayground` docker image
```
docker run -d -p 80:80 testers-playground:latest
```
5. Navigate to `http://localhost/` in your web browser
6. Have fun!

## About

Testers playground is an open-source project released under the MIT license, which means you can use it for any purpose, even for commercial projects.

Testers Playground was created and is maintained by **[Viv Richards](https://vivrichards.co.uk/)**.
