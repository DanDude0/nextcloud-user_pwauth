Description:
This backend allows Unix local users to authenticate and use ownCloud using pwauth project (https://code.google.com/p/pwauth/).

If your ownCloud instance is on your desktop/laptop computer or your personnal server, you can use directly the PAM/Unix authentication instead of creating new accounts into ownCloud.

Use directly your desktop/laptop credentials or your personnal server Unix account !


Changelog:
## VERSION 0.2
- Authentication and groups functionnal, compatible with ownCloud 2
## VERSION 0.3
- CalDAV sharing is now functionnal (wasn't working until then because oc_principals were empty for Unix users)
- Cleaned a few code tricks (log functions, etc…)
## VERSION 0.4
- Sharing with Unix user was broken, works smoothly on ownCloud 3 not on ownCloud 2 (don't know why)
## VERSION 0.43
- Correcting various little bugs (empty line on top of WebDAV requests, etc…)
## VERSION 0.45
- Small bug fix thanks to THBB : module was ignored by some parts of ownCloud due to the fact that it does not announce itself as an authentication module

### VERSION 1.0
- Compatible with OC4
- Incompatible with OC3 (prefer version 0.45)
- Migration from OC3 to OC4 will generate trouble with Unix User Account : the database update procedure is triggered only with database users ! Be very careful when updating !
### VERSION 1.1
- Integration of svrnm's patch to add range of users and/or single users to the authorized users list ;
- You can now change the pwauth executable path directly into the admin panel ;
- Translation is now available in french and english (german, italian and esperanto coming soon).
- This version is not compatible with OC >4.0.*

### VERSION 2.0
- Partial rewriting to be compatible with OC4.5.0
- Includes new german translation (thanks to Manuel for proofreading)
- Includes new italian translation
- This version is not compatible with OC < 4.5.0

### VERSION 2.1
- Licence change : AGPL -> WTFPLc
- Fixes some vulnerabilities UPDATE IS STRONGLY RECOMMENDED

### VERSION 2.2
- As Ienny suggested since OC6.0, mail setting form is not visible if auth plugin does not have the SET_PASSWORD capabilities (which is abnormal). So I added the ability to set password (with an empty function) just to make the form appear.

### VERSION 2.3
- THIS VERSION WILL PROBABLY BE INCOMPATIBLE WITH OC < 8.0 (hasn't been tested, be very careful)
- App has been cleaned up pretty hard to be compliant with most of the new API
- App is still not completely compliant with 8.2 API but still works (a lot of work to do here)

## VERSION 2.4
- THIS VERSION WILL PROBABLY BE INCOMPATIBLE WITH OC < 8.2
- Integrated patch from oni304 (basically a cleaner version with recent API)

Please test and give me your feedbacks in comments, this will be greatly appreciated :)

License:
DO WHAT THE FUCK YOU WANT TO PUBLIC LICENSE
Version 2, December 2004

Copyright (C) 2004 Sam Hocevar

Everyone is permitted to copy and distribute verbatim or modified
copies of this license document, and changing it is allowed as long
as the name is changed.

DO WHAT THE FUCK YOU WANT TO PUBLIC LICENSE
TERMS AND CONDITIONS FOR COPYING, DISTRIBUTION AND MODIFICATION

0. You just DO WHAT THE FUCK YOU WANT TO.
