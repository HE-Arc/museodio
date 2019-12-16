---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.

<!-- END_INFO -->

#Audio note manager


APIs for managing audio notes
<!-- START_3797195878b93614e34ab67545f35a6f -->
## Returns all the audio notes

[Returns all created audio notes recorded around the world]

> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/audio-notes" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/audio-notes"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
[
    {
        "firstName": "Curt",
        "lastName": "Kunde",
        "longitude": 7.726829,
        "latitude": 46.436519,
        "file_name": "11_2019_11_07_13_26_02.mp3"
    },
    {
        "firstName": "Mikel",
        "lastName": "Kuvalis",
        "longitude": 6.633009,
        "latitude": 46.56611,
        "file_name": "11_2019_11_07_13_26_02.mp3"
    },
    {
        "firstName": "Mireille",
        "lastName": "Cremin",
        "longitude": 6.556565,
        "latitude": 46.129265,
        "file_name": "11_2019_11_07_13_26_02.mp3"
    },
    {
        "firstName": "Curt",
        "lastName": "Kunde",
        "longitude": 7.329063,
        "latitude": 46.495056,
        "file_name": "11_2019_11_07_13_26_02.mp3"
    },
    {
        "firstName": "Chad",
        "lastName": "Ledner",
        "longitude": 7.931466,
        "latitude": 46.77808,
        "file_name": "11_2019_11_07_13_26_02.mp3"
    },
    {
        "firstName": "Mireille",
        "lastName": "Cremin",
        "longitude": 6.274503,
        "latitude": 46.722636,
        "file_name": "11_2019_11_07_13_26_02.mp3"
    },
    {
        "firstName": "Curt",
        "lastName": "Kunde",
        "longitude": 6.563205,
        "latitude": 46.836114,
        "file_name": "11_2019_11_07_13_26_02.mp3"
    },
    {
        "firstName": "Cecil",
        "lastName": "Kessler",
        "longitude": 6.059309,
        "latitude": 46.169573,
        "file_name": "11_2019_11_07_13_26_02.mp3"
    },
    {
        "firstName": "Cyrus",
        "lastName": "Torp",
        "longitude": 7.636648,
        "latitude": 46.271848,
        "file_name": "11_2019_11_07_13_26_02.mp3"
    },
    {
        "firstName": "Mayra",
        "lastName": "Quigley",
        "longitude": 6.669485,
        "latitude": 46.115831,
        "file_name": "11_2019_11_07_13_26_02.mp3"
    }
]
```

### HTTP Request
`GET api/audio-notes`


<!-- END_3797195878b93614e34ab67545f35a6f -->

<!-- START_31b1b14ff9e2da38f65171df6736b229 -->
## Saves an audio note

> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/audio-notes/save" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/audio-notes/save"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "error": {
        "longitude": [
            "The longitude field is required."
        ],
        "latitude": [
            "The latitude field is required."
        ],
        "audio": [
            "The audio field is required."
        ]
    },
    "test": {
        "attributes": {},
        "request": {},
        "query": {},
        "server": {},
        "files": {},
        "cookies": {},
        "headers": {}
    }
}
```

### HTTP Request
`POST api/audio-notes/save`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `longitude` |  required  | The id of the location.
    `latitude` |  required  | The id of the location.
    `audio` |  required  | The audio file name.

<!-- END_31b1b14ff9e2da38f65171df6736b229 -->

<!-- START_ecd151c7a9f1edcb09194b93195fdc5b -->
## Download an audio note matching to filename

[Returns the audio note as an audio playable file]

> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/audio-notes/download/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/audio-notes/download/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/audio-notes/download/{file_name}`


<!-- END_ecd151c7a9f1edcb09194b93195fdc5b -->

<!-- START_db848b3d4a12c6e7eb87c3bea62773b2 -->
## api/audio-notes/check/{file_name}
> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/audio-notes/check/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/audio-notes/check/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/audio-notes/check/{file_name}`


<!-- END_db848b3d4a12c6e7eb87c3bea62773b2 -->

<!-- START_a65b5b6bd585804a194ab62c43ed07bf -->
## Returns all the audio notes from the friends of the current user and near to the position of the current user

> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/audio-notes/7.0/46.0/1000" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/audio-notes/7.0/46.0/1000"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (422):

```json
{
    "message": "The given data was invalid.",
    "errors": {
        "longitude": [
            "The longitude field is required."
        ],
        "latitude": [
            "The latitude field is required."
        ]
    }
}
```

### HTTP Request
`GET api/audio-notes/{longitude}/{latitude}/{outer_radius}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `longitude` |  optional  | numeric required The latitude.
    `latitude` |  optional  | numeric required The longitude.
    `outer_radius` |  optional  | numeric required The outer radius.

<!-- END_a65b5b6bd585804a194ab62c43ed07bf -->

#general


<!-- START_0c068b4037fb2e47e71bd44bd36e3e2a -->
## Authorize a client to access the user&#039;s account.

> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/oauth/authorize" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/oauth/authorize"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET oauth/authorize`


<!-- END_0c068b4037fb2e47e71bd44bd36e3e2a -->

<!-- START_e48cc6a0b45dd21b7076ab2c03908687 -->
## Approve the authorization request.

> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/oauth/authorize" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/oauth/authorize"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (419):

```json
{
    "message": "CSRF token mismatch."
}
```

### HTTP Request
`POST oauth/authorize`


<!-- END_e48cc6a0b45dd21b7076ab2c03908687 -->

<!-- START_de5d7581ef1275fce2a229b6b6eaad9c -->
## Deny the authorization request.

> Example request:

```bash
curl -X DELETE \
    "http://127.0.0.1:8000/oauth/authorize" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/oauth/authorize"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (419):

```json
{
    "message": "CSRF token mismatch."
}
```

### HTTP Request
`DELETE oauth/authorize`


<!-- END_de5d7581ef1275fce2a229b6b6eaad9c -->

<!-- START_a09d20357336aa979ecd8e3972ac9168 -->
## Authorize a client to access the user&#039;s account.

> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/oauth/token" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/oauth/token"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (400):

```json
{
    "error": "unsupported_grant_type",
    "error_description": "The authorization grant type is not supported by the authorization server.",
    "hint": "Check that all required parameters have been provided",
    "message": "The authorization grant type is not supported by the authorization server."
}
```

### HTTP Request
`POST oauth/token`


<!-- END_a09d20357336aa979ecd8e3972ac9168 -->

<!-- START_d6a56149547e03307199e39e03e12d1c -->
## Get all of the authorized tokens for the authenticated user.

> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/oauth/tokens" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/oauth/tokens"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET oauth/tokens`


<!-- END_d6a56149547e03307199e39e03e12d1c -->

<!-- START_a9a802c25737cca5324125e5f60b72a5 -->
## Delete the given token.

> Example request:

```bash
curl -X DELETE \
    "http://127.0.0.1:8000/oauth/tokens/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/oauth/tokens/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (419):

```json
{
    "message": "CSRF token mismatch."
}
```

### HTTP Request
`DELETE oauth/tokens/{token_id}`


<!-- END_a9a802c25737cca5324125e5f60b72a5 -->

<!-- START_abe905e69f5d002aa7d26f433676d623 -->
## Get a fresh transient token cookie for the authenticated user.

> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/oauth/token/refresh" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/oauth/token/refresh"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (419):

```json
{
    "message": "CSRF token mismatch."
}
```

### HTTP Request
`POST oauth/token/refresh`


<!-- END_abe905e69f5d002aa7d26f433676d623 -->

<!-- START_babcfe12d87b8708f5985e9d39ba8f2c -->
## Get all of the clients for the authenticated user.

> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/oauth/clients" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/oauth/clients"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET oauth/clients`


<!-- END_babcfe12d87b8708f5985e9d39ba8f2c -->

<!-- START_9eabf8d6e4ab449c24c503fcb42fba82 -->
## Store a new client.

> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/oauth/clients" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/oauth/clients"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (419):

```json
{
    "message": "CSRF token mismatch."
}
```

### HTTP Request
`POST oauth/clients`


<!-- END_9eabf8d6e4ab449c24c503fcb42fba82 -->

<!-- START_784aec390a455073fc7464335c1defa1 -->
## Update the given client.

> Example request:

```bash
curl -X PUT \
    "http://127.0.0.1:8000/oauth/clients/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/oauth/clients/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (419):

```json
{
    "message": "CSRF token mismatch."
}
```

### HTTP Request
`PUT oauth/clients/{client_id}`


<!-- END_784aec390a455073fc7464335c1defa1 -->

<!-- START_1f65a511dd86ba0541d7ba13ca57e364 -->
## Delete the given client.

> Example request:

```bash
curl -X DELETE \
    "http://127.0.0.1:8000/oauth/clients/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/oauth/clients/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (419):

```json
{
    "message": "CSRF token mismatch."
}
```

### HTTP Request
`DELETE oauth/clients/{client_id}`


<!-- END_1f65a511dd86ba0541d7ba13ca57e364 -->

<!-- START_9e281bd3a1eb1d9eb63190c8effb607c -->
## Get all of the available scopes for the application.

> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/oauth/scopes" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/oauth/scopes"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET oauth/scopes`


<!-- END_9e281bd3a1eb1d9eb63190c8effb607c -->

<!-- START_9b2a7699ce6214a79e0fd8107f8b1c9e -->
## Get all of the personal access tokens for the authenticated user.

> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/oauth/personal-access-tokens" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/oauth/personal-access-tokens"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET oauth/personal-access-tokens`


<!-- END_9b2a7699ce6214a79e0fd8107f8b1c9e -->

<!-- START_a8dd9c0a5583742e671711f9bb3ee406 -->
## Create a new personal access token for the user.

> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/oauth/personal-access-tokens" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/oauth/personal-access-tokens"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (419):

```json
{
    "message": "CSRF token mismatch."
}
```

### HTTP Request
`POST oauth/personal-access-tokens`


<!-- END_a8dd9c0a5583742e671711f9bb3ee406 -->

<!-- START_bae65df80fd9d72a01439241a9ea20d0 -->
## Delete the given token.

> Example request:

```bash
curl -X DELETE \
    "http://127.0.0.1:8000/oauth/personal-access-tokens/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/oauth/personal-access-tokens/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (419):

```json
{
    "message": "CSRF token mismatch."
}
```

### HTTP Request
`DELETE oauth/personal-access-tokens/{token_id}`


<!-- END_bae65df80fd9d72a01439241a9ea20d0 -->

<!-- START_d7b7952e7fdddc07c978c9bdaf757acf -->
## Register in the API

> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "error": {
        "firstname": [
            "The firstname field is required."
        ],
        "lastname": [
            "The lastname field is required."
        ],
        "email": [
            "The email field is required."
        ],
        "password": [
            "The password field is required."
        ]
    }
}
```

### HTTP Request
`POST api/register`


<!-- END_d7b7952e7fdddc07c978c9bdaf757acf -->

<!-- START_c3fa189a6c95ca36ad6ac4791a873d23 -->
## Login for API

> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "error": {
        "error": "Sorry, unknown username or password."
    }
}
```

### HTTP Request
`POST api/login`


<!-- END_c3fa189a6c95ca36ad6ac4791a873d23 -->

<!-- START_00e7e21641f05de650dbe13f242c6f2c -->
## Logout for API

> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "success": "Successfully logged out."
}
```

### HTTP Request
`GET api/logout`


<!-- END_00e7e21641f05de650dbe13f242c6f2c -->

<!-- START_f263e9c498ad3f9144304f8f62429346 -->
## Seach user by firstname

> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/users/search/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/users/search/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "success": []
}
```

### HTTP Request
`GET api/users/search/{query_name}`


<!-- END_f263e9c498ad3f9144304f8f62429346 -->

<!-- START_7edc0e9974cb6ca47974c68a17d1938f -->
## Index function of the FriendsController

> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/friends" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/friends"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "success": {
        "friends": [],
        "invitationsWaitingForAnswer": [],
        "invitationsToAnswer": []
    }
}
```

### HTTP Request
`GET api/friends`


<!-- END_7edc0e9974cb6ca47974c68a17d1938f -->

<!-- START_f05cf1deece1e8c35e1ec331331e3319 -->
## Method to create a friendship between two users

> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/friends" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/friends"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (422):

```json
{
    "message": "The given data was invalid.",
    "errors": {
        "id": [
            "The id field is required."
        ]
    }
}
```

### HTTP Request
`POST api/friends`


<!-- END_f05cf1deece1e8c35e1ec331331e3319 -->

<!-- START_21d33fd99fad4620b704e1c5c2326a37 -->
## Method to show all the friendships

> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/friends/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/friends/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/friends/{friend}`


<!-- END_21d33fd99fad4620b704e1c5c2326a37 -->

<!-- START_2c33ce4f3ff19bf084f4182686d4c214 -->
## Method to update a friendship that mean accept the friendship

> Example request:

```bash
curl -X PUT \
    "http://127.0.0.1:8000/api/friends/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/friends/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (422):

```json
{
    "message": "The given data was invalid.",
    "errors": {
        "id": [
            "The id field is required."
        ]
    }
}
```

### HTTP Request
`PUT api/friends/{friend}`

`PATCH api/friends/{friend}`


<!-- END_2c33ce4f3ff19bf084f4182686d4c214 -->

<!-- START_5256ac7cddbd9267236aaa0874cb6a49 -->
## Method to delete a friendship between two users

> Example request:

```bash
curl -X DELETE \
    "http://127.0.0.1:8000/api/friends/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/friends/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (422):

```json
{
    "message": "The given data was invalid.",
    "errors": {
        "id": [
            "The id field is required."
        ]
    }
}
```

### HTTP Request
`DELETE api/friends/{friend}`


<!-- END_5256ac7cddbd9267236aaa0874cb6a49 -->

<!-- START_ba35aa39474cb98cfb31829e70eb8b74 -->
## Login for API

> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`POST login`


<!-- END_ba35aa39474cb98cfb31829e70eb8b74 -->

<!-- START_e65925f23b9bc6b93d9356895f29f80c -->
## Logout for API

> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "success": "Successfully logged out."
}
```

### HTTP Request
`POST logout`


<!-- END_e65925f23b9bc6b93d9356895f29f80c -->

<!-- START_d7aad7b5ac127700500280d511a3db01 -->
## Register in the API

> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "error": {
        "firstname": [
            "The firstname field is required."
        ],
        "lastname": [
            "The lastname field is required."
        ],
        "email": [
            "The email field is required."
        ],
        "password": [
            "The password field is required."
        ]
    }
}
```

### HTTP Request
`POST register`


<!-- END_d7aad7b5ac127700500280d511a3db01 -->

<!-- START_d72797bae6d0b1f3a341ebb1f8900441 -->
## Display the form to request a password reset link.

> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/password/reset"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET password/reset`


<!-- END_d72797bae6d0b1f3a341ebb1f8900441 -->

<!-- START_feb40f06a93c80d742181b6ffb6b734e -->
## Send a reset link to the given user.

> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/password/email" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/password/email"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`POST password/email`


<!-- END_feb40f06a93c80d742181b6ffb6b734e -->

<!-- START_e1605a6e5ceee9d1aeb7729216635fd7 -->
## Display the password reset view for the given token.

If no token is present, display the link request form.

> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/password/reset/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/password/reset/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET password/reset/{token}`


<!-- END_e1605a6e5ceee9d1aeb7729216635fd7 -->

<!-- START_cafb407b7a846b31491f97719bb15aef -->
## Reset the given user&#039;s password.

> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/password/reset"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`POST password/reset`


<!-- END_cafb407b7a846b31491f97719bb15aef -->

<!-- START_b77aedc454e9471a35dcb175278ec997 -->
## Display the password confirmation view.

> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/password/confirm" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/password/confirm"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET password/confirm`


<!-- END_b77aedc454e9471a35dcb175278ec997 -->

<!-- START_54462d3613f2262e741142161c0e6fea -->
## Confirm the given user&#039;s password.

> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/password/confirm" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/password/confirm"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (422):

```json
{
    "message": "The given data was invalid.",
    "errors": {
        "password": [
            "The password field is required."
        ]
    }
}
```

### HTTP Request
`POST password/confirm`


<!-- END_54462d3613f2262e741142161c0e6fea -->

<!-- START_cb859c8e84c35d7133b6a6c8eac253f8 -->
## Show the application dashboard.

> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/home" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/home"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET home`


<!-- END_cb859c8e84c35d7133b6a6c8eac253f8 -->

<!-- START_0cad3e9017c1172d259bc85def25267e -->
## Index function of the FriendsController

> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/friends" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/friends"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "success": {
        "friends": [],
        "invitationsWaitingForAnswer": [],
        "invitationsToAnswer": []
    }
}
```

### HTTP Request
`GET friends`


<!-- END_0cad3e9017c1172d259bc85def25267e -->

<!-- START_b83539fb2e51973bd2a94e084f8a2e90 -->
## Method to create a friendship between two users

> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/friends" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/friends"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (422):

```json
{
    "message": "The given data was invalid.",
    "errors": {
        "id": [
            "The id field is required."
        ]
    }
}
```

### HTTP Request
`POST friends`


<!-- END_b83539fb2e51973bd2a94e084f8a2e90 -->

<!-- START_a4fe0bb1d9f49a7685e1b43a9b281fa9 -->
## Method to show all the friendships

> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/friends/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/friends/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET friends/{friend}`


<!-- END_a4fe0bb1d9f49a7685e1b43a9b281fa9 -->

<!-- START_a960198e57169f1a961d949901e303ac -->
## Method to update a friendship that mean accept the friendship

> Example request:

```bash
curl -X PUT \
    "http://127.0.0.1:8000/friends/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/friends/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (422):

```json
{
    "message": "The given data was invalid.",
    "errors": {
        "id": [
            "The id field is required."
        ]
    }
}
```

### HTTP Request
`PUT friends/{friend}`

`PATCH friends/{friend}`


<!-- END_a960198e57169f1a961d949901e303ac -->

<!-- START_9e60c29c63c63da995606e142bb6e576 -->
## Method to delete a friendship between two users

> Example request:

```bash
curl -X DELETE \
    "http://127.0.0.1:8000/friends/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/friends/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdlZTAzZjlhMmNiMDNiYzAxMjE1NjU3ODVmZDA3MGE5ZmQwMGMwY2IwOTAyNDJjZTZmYTUxODE4YjU1ODk4MjE0YzE4MzMyZjA5MDY5MTgwIn0.eyJhdWQiOiIxIiwianRpIjoiN2VlMDNmOWEyY2IwM2JjMDEyMTU2NTc4NWZkMDcwYTlmZDAwYzBjYjA5MDI0MmNlNmZhNTE4MThiNTU4OTgyMTRjMTgzMzJmMDkwNjkxODAiLCJpYXQiOjE1NzY1MjY4OTksIm5iZiI6MTU3NjUyNjg5OSwiZXhwIjoxNjA4MTQ5Mjk5LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.O-2K2OoqoYqJPm0yT9QcyA_zqdusVi763jDN1Pq0zY-LldqUG-1WguA-RhJ-ictM4zFCwTLcDvGpVAYCtIqPDhzEBT9p19uXENVl5JUxtImKs3zve3gd89h2XeGT2QW1Zu7q_l5YDnqjEbSrpTbZ3DbTaHwSLZ6tmIrxiZaTlqsHYgHSHSjsYbD9yPh2y6YNibyi903Sp8BRvYfk6cnk0OSOvW8CyKp3ar4bJAsXMV9TojPyvI5Z-LiRl9XTS1icGILVSpt8hVhQQMI_nDWRO-r59RUK5W3D-3nCXRZOtPKDWgLG0xKyhffFlj2YcMXD5oEnSJLEaoTIH1sBgY2B0SA7RDXxQYTbYcH-BTBxrCAbbW-89oL1KWHkXdvoZ5ZsYvU1hxBIXwimfwVf0Oa9CPlmqUZ3SFHRD56xyGHhW8JEz57BQ4GD9rdM2Tu8LlgKg6y_aEcDwY5IzUyxGNkmXA9CuybVJEcLlB0mQwjI3clAVScKwrakKBcm4MOm0X2Z1jjIz4F9OhrcjBWXJEnvRytUORxnui2-BygdtczK5DBiYOXQHyj6ECRo5bz3KQLJfA7Wm6HTQgBQnbMCnBlqfqn4V1l8OUo2MBgVnHvoDzHixnusYcPa96mGC6vhPUVxrhfmMTznrvJapgtt59ZZl2PfdkG715TYn_KW7EGFzsM",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (422):

```json
{
    "message": "The given data was invalid.",
    "errors": {
        "id": [
            "The id field is required."
        ]
    }
}
```

### HTTP Request
`DELETE friends/{friend}`


<!-- END_9e60c29c63c63da995606e142bb6e576 -->


