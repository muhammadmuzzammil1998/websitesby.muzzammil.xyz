
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
	"archive": "If website is archived; link to archive"
}]
```
Only requirements are `"image"`, `"class"` and atleast one of the other `keys` and `values`.
### Example:
```json
[{
	"image": "./images/muzzammil.xyz",
	"url": "//muzzammil.xyz"
}]
```
### Example of a generated card:
```html
<div class="card">
    <img src="./images/muzzammil.xyz.png">
    <cover><a href='//muzzammil.xyz' target='_blank'><url></url></a></cover>
</div>
```
#### Effect: Normal
![image](https://user-images.githubusercontent.com/12321712/44614916-9758e880-a84b-11e8-95bc-67288d5e189b.png)
#### Effect: Hovered (normal)
![image](https://user-images.githubusercontent.com/12321712/44614925-f0288100-a84b-11e8-8363-19638ee9d26a.png)
#### Effect: Hovered (backdrop-filter)
![image](https://user-images.githubusercontent.com/12321712/44614920-b6577a80-a84b-11e8-885a-9fbd2468b7a5.png)
