# Change Log
All notable changes to this project will be documented in this file.
This project adheres to [Semantic Versioning](http://semver.org/).

## [Unreleased]
### Added
- create table `content_version_page` to store older versions of cms pages
- save older versions of cms pages via event `cms_page_save_after` into table `content_version_page`
- add tab `Versions` to edit cms page
- receive diff between two cms page versions via ajax
