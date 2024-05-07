FROM node:latest

CMD mkdir -p /usr/src/app

# set app directory
WORKDIR /usr/src/app

COPY ./node/ /usr/src/app

EXPOSE 3000

CMD ["node", "app.js"]