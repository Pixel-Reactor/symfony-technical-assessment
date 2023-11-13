
# Project Title

Synfony movie storage technical assessment

## Desciption

This is a synfony project, that use themoviedb api to add full details to movies that a user store in is own database. 
This allow to make a personal db movie storage with selected movies retrieving full movie detail from the api.




## API Reference

#### Connection check

```http
  GET api/ping
```

Type      | Description                 |
 :------- | :------------------------- |
 `string` | Send a request to the db to return current time to check connection|

#### Store item

```http
  POST /api/add/movie/
```

| Request | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `POST`      | `JSON` | **Required fields** name,id  |

#### ex. {'name':'Oppenhaimer', 'id':872585}

Add a new movie to the db. The field name is the name you want to use to store the movie and the id is the movie id from themoviedb api to collect full details

#### List all stored movies
```http
  GET /api/all/
```

| Request | Description                       |
| :-------- |  :-------------------------------- |
| `GET`      |  **Required fields** Retrieve all stored data  |



Retrieve all Movies stored in the database  and send an array of them with full details of each one.


#### Movie details only

```http
  GET api/movie/:id
```

| Request | Description                       |
| :-------- |  :-------------------------------- |
| `GET`      |  **Required fields** id  |


 Make a call to the Api retrieving the movie details using the id field in the url request. 
### Notice

This request is to check only purpose, the data retrieved will not be stored in the db.


## Authors

- [@Matteo Stella => Pixel-Reactor](https://www.github.com/pixel-reactor)
Matteo Stella
 Full Stack Developer
