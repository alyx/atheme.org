<div class="heading">libmcs</div>

	<div class="subheading">A library and set of userland tools which abstract the storage of configuration settings away from userland applications.</div>

	<br /><br />

	<strong>Note</strong>: mcs has been deprecated by GSettings.  Do not use it
	in newly written code.

	<br /><br />

	<div id="features">

	It is hoped that by using mcs, that the applications which use it
	will generally have a more congruent feeling in regards to settings.
	<br /><br />
	There have been other projects like this before (such as GConf), but
	unlike those projects, mcs strictly handles abstraction. It does not
	impose any specific data storage requirement, nor is it tied to any
	desktop environment or software suite.
	<br /><br />
	Because mcs is licenced under the BSD license, it is hoped that many
	applications will adopt it's use.

	<br /><br /><br />

	<strong>Available Storage Backends</strong>
	<br />
	The default storage backend (unless a different one is set in your
	environment), is one which stores freedesktop.org keyfile standard
	compliant files in accordance to the freedesktop XDG specification.
	<br /><br />
	Additionally, a GConf storage backend is available for users who
	would prefer to use that instead.
	<br /><br />
	To temporarily change the selected storage backend, simply export
	the MCS_BACKEND environment variable, and mcs will handle the
	rest automatically.
	<br /><br />
	You can also change the backend that mcs uses permanantly, in both
	the scope of a user account, and the default site-wide setting used.
	<br /><br />
	To set a different backend for a user account, simply run:<br />
	<span class="cli">&nbsp; $ echo "gconf" > $HOME/.mcs-backend</span>
	<br /><br />
	This will set the storage backend to gconf for the local user.
	<br /><br />
	To set a different default backend, you can do the same, but
	the filepath should be /etc/mcs-backend, or whatever your
	system configuration directory is, if it is not /etc.
	<br /><br />
	The selected backend can be verified by using the mcs-info(1)
	utility.

	<br /><br /><br />

	<strong>Installation is fairly typical:</strong><br />
	<span class="cli">$ ./configure</span><br />
	<span class="cli">$ make</span><br />
	<span class="cli">$ sudo make install</span><br />
	<br />
	(If sudo isn't on your system, su to root.)<br />

	<br /><br />

	<p style="text-align: center; font-weight: bold;"><a href="http://www.atheme.org/assets/mcs-example.c.txt" title="libmcs utilization example">A Simple Example</a></p>

	<br /><br /><br />

        <strong>Download the current development branch (requires Git):</strong><br />
        <span class="cli">$ git clone git://github.com/atheme/libmcs.git</span>

        <br /><br /><br />

        <div id="dl">
        <strong>Downloads</strong>
        <ul>
	<li><a href="http://distfiles.atheme.org/libmcs-0.7.2.tgz">0.7.2</a></li>
	<li><a href="http://distfiles.atheme.org/libmcs-0.7.1.tgz">0.7.1</a></li>
	<li><a href="http://distfiles.atheme.org/libmcs-0.7.0.tgz">0.7.0</a></li>
	<li><a href="http://distfiles.atheme.org/libmcs-0.6.0.tgz">0.6.0</a></li>
        <li><a href="http://distfiles.atheme.org/libmcs-0.5.0.tgz">0.5.0</a></li>
        </ul>
        </div>

        <a href="http://github.com/atheme/libmcs/" title="libmcs"><p style="text-align: center;"><span class="italics bold">Visit the Changelog</span></p></a>
        </div>




