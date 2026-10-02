# Tallinn Weather Forecast – PHP

Simple PHP exercise that fetches the weather forecast for Tallinn from the MET Norway / Yr.no API and prints the forecast time and air temperature.

## What the exercise practices

- making an HTTP GET request
- using HTTP headers
- using latitude and longitude query parameters
- reading JSON data
- converting JSON into PHP arrays
- accessing nested array values
- printing weather data

## Technologies

- PHP 8
- MET Norway Locationforecast API
- Visual Studio Code

## Tallinn coordinates

```text
Latitude:  59.4370
Longitude: 24.7536
```

## API endpoint

```text
https://api.met.no/weatherapi/locationforecast/2.0/compact
```

The coordinates are added as query parameters:

```text
?lat=59.4370&lon=24.7536
```

## Current output

Example:

```text
2026-10-02T11:00:00Z 13.1C
```

## Run

```powershell
php index.php
```

## Current progress

- [x] Send HTTP request
- [x] Receive JSON response
- [x] Parse JSON
- [x] Read forecast time
- [x] Read air temperature
- [ ] Print multiple forecast hours
- [ ] Use a loop for the forecast