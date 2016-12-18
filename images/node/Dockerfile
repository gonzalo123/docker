FROM node:argon

# Create app directory
RUN mkdir -p /mnt/code
WORKDIR /mnt/code

COPY ./etc/node/package.json /mnt/code/package.json
RUN npm install

COPY code /mnt/code

EXPOSE 8080
CMD [ "npm", "start" ]