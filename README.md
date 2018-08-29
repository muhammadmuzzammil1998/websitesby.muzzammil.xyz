
# [websitesby.muzzammil.xyz](https://websitesby.muzzammil.xyz/?ref=github) [![GitHub license](https://img.shields.io/github/license/muhammadmuzzammil1998/websitesby.muzzammil.xyz.svg)](https://github.com/muhammadmuzzammil1998/websitesby.muzzammil.xyz/blob/master/LICENSE) [![CodeFactor](https://www.codefactor.io/repository/github/muhammadmuzzammil1998/websitesby.muzzammil.xyz/badge)](https://www.codefactor.io/repository/github/muhammadmuzzammil1998/websitesby.muzzammil.xyz) [![Twitter](https://img.shields.io/twitter/url/https/github.com/muhammadmuzzammil1998/websitesby.muzzammil.xyz.svg?style=social)](https://twitter.com/intent/tweet?text=Wow:&url=https%3A%2F%2Fgithub.com%2Fmuhammadmuzzammil1998%2Fwebsitesby.muzzammil.xyz) 
A collection of some of the websites I made. :)
![image](https://user-images.githubusercontent.com/12321712/44597798-7c0bc000-a7ee-11e8-8d64-7b5bb9bd8f6f.png)
It accesses data stored in `data.json` file which is then decoded by `php` to produce an output to show as a card on website. Nothing fancy.
## JSON structure
```json
[{
	"url": "If website has a link; link for website",
	"image": "Location of screenshot of website",
	"github": "If website has a github repo; link to the github repository",
	"archive": "If website is archived; link to archive"
}]
```
Only requirements are `"image"` `key` and its `value` and atleast one of the other `keys` and `values`.
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
![image](https://user-images.githubusercontent.com/12321712/44615190-7bf0dc00-a851-11e8-8987-773f24ce274f.png)
#### Effect: Hovered (backdrop-filter)
![image](https://user-images.githubusercontent.com/12321712/44615198-b8bcd300-a851-11e8-9301-6342f4a01bb4.png)

## Dummy card with all keys
### JSON object
```json
[{
	"url": "//muzzammil.xyz",
	"image": "./images/muzzammil.xyz",
	"github": "//github.com/muhammadmuzzammil1998/muzzammil.xyz",
	"archive": "//old.muzzammil.xyz"
}]
```
### Generated HTML code (formatted)
```html
<div class="card">
	<img src="./images/muzzammil.xyz.png">
	<cover>
		<a href="//github.com/muhammadmuzzammil1998/muzzammil.xyz" target="_blank">
			<github></github>
		</a>
		<a href="//muzzammil.xyz" target="_blank">
			<url></url>
		</a>
		<a href="//old.muzzammil.xyz" target="_blank">
			<archive></archive>
		</a>
	</cover>
</div>
```
![image](https://user-images.githubusercontent.com/12321712/44615162-629b6000-a850-11e8-870c-765eacdac2e5.png)
