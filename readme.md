# AddVersion for Craft

A seriously simple way to bust cache on any file. Appends the Unix Epoch (Seconds since Jan 1, 1970) of the files modified time as a query string param on the file path.

##Params
1. **Query String Param:** Defaults to "v"

## Usage

####As a Filter
`{{ "/assets/css/main.css" | addVersion }}`

`{{ "/assets/css/main.css" | addVersion("rev") }}`