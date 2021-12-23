const request  = require('request');
const constants = require('../config');

const weatherData  = (address, callback) => {
    const url = constants.openWeatherMap.BASE_URL + encodeURI(address) + '&appid=' + constants.openWeatherMap.SECRET_KEY;
    
    request({url, json:true},(error, {body}) => {
        
        if(error){
            callback("can't fatch data from api",undefined);
        }
        else{
            callback(undefined,{
                temperature: body.main.temp,
                description: body.weather[0].description,
                cityName:body.name
            })
        }
    })
}
module.exports = weatherData;