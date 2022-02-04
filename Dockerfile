FROM node:alpine
COPY . /test
WORKDIR /test
CMD node test.js