# PathToExcel-Prediction-Engine-API
## Author @xarmeetx 2019
## Contact
- Discord: [@xarmeetx#7768](https://discord.gg)
- Twitter: [@xarmeetx](https://twitter.com/xarmeetx)
- Email: [xarmeetx@gmail.com](mailto:xarmeetx@gmail.com)

##### An engine that uses AI to predict the number of lessons a student must jump back. 
##### Based, on certain parameters and the current lesson ID, the engine will return the jump prediction, predicted ID, and predicted name

### Requests
```
api/v1/get/?id=30&momentum=1&proficiency=1&difficulty=1&percent=1```

### Responses
```response will be in JSON format```
```json
{
"jump_prediction": "1",
"predicted_ID": "31",
"predicted_name": "G2 M3 L13"
}
```

### Errors
```errors come with a message, giving the fix to the issue```
```json
{
"message": "enter 5 valid parameters: momentum, proficiency, difficulty, percent, and jump"
}
```
