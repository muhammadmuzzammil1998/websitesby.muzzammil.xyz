
# [websitesby.muzzammil.xyz](https://websitesby.muzzammil.xyz)
A collection of some of the websites I made. :)
![image](https://user-images.githubusercontent.com/12321712/44597798-7c0bc000-a7ee-11e8-8d64-7b5bb9bd8f6f.png)
It accesses data stored in `data.json` file which is then decoded by `php` to produce an output to show as a card on website. Nothing fancy.
## JSON structure
```json
[{
	"url": "If website has a link; ink for website",
	"image": "Location of screenshot of website",
	"github": "If website has a github repo; link to the github repository",
	"archive": "If website is archived; link to archive",
	"class": "If image is dark then light, otherwise dark"
}]
```
Only requirements are `"image"`, `"class"` and atleast one of the other `keys` and `values`.
### Example:
```json
[{
	"image": "./images/muzzammil.xyz",
	"url": "//muzzammil.xyz",
	"class": "light"
}]
```
### Example of a generated card:
```html
<div class="card light">
    <img src="./images/muzzammil.xyz.png">
    <cover><a href='//muzzammil.xyz' target='_blank'><url></url></a></cover>
</div>
```
#### Effect: Normal
![image](https://user-images.githubusercontent.com/12321712/44597995-2be12d80-a7ef-11e8-9067-24f7cf19dcb7.png)
#### Effect: Hovered
![image](https://user-images.githubusercontent.com/12321712/44598061-5e8b2600-a7ef-11e8-8150-1b77aed0106f.png)
