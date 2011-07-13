<div class="heading">libguess</div>

	<div class="subheading">A high-speed character set detection library.</div>

	<br /><br />

	<div id="features">

	<strong>libguess has two functions:</strong><br />
	<br />
	<span class="cli">libguess_determine_encoding(const char *inbuf, int length, const char *region);</span><br />
	<br />
	This detects a character set.  Returns an appropriate charset name
	that can be passed to iconv_open().  Region is the name of the language
	or region that the data is related to, e.g. 'Baltic' for the Baltic states,
	or 'Japanese' for Japan.<br />
	<br />
	<span class="cli">libguess_validate_utf8(const char *inbuf, int length);</span><br />
	<br />
	This employs libguess's DFA-based character set validation rules to ensure
	that a string is pure UTF-8.  GLib's UTF-8 validation functions are broken,
	for example.
	<br />
	<br />
	Just include libguess.h and link to libguess to get these functions in your
	program.  For your convenience, a pkg-config file is also supplied.
	<br />
	<br />
  	libguess employs discrete-finite automata to deduce the character set of the
	input buffer.  The advantage of this is that all character sets can be checked
	in parallel, and quickly.  Right now, libguess passes a byte to each DFA on the
	same pass, meaning that the winning character set can be deduced as efficiently
	as possible.
	<br /><br />
	libguess is fully reentrant, using only local stack memory for DFA operations.

	<br /><br /><br />

	<strong>Download the current development branch (requires Git):</strong><br />
	<span class="cli">$ git clone git://git.atheme.org/libguess.git</span>

	<br /><br /><br />

	<div id="dl">
	<strong>Downloads</strong>
	<ul>
	<li><a href="http://distfiles.atheme.org/libguess-1.0.tgz">1.0</a></li>
	</ul>
	</div>

	<a href="http://git.atheme.org/libguess" title="libguess"><p style="text-align: center;"><span class="italics bold">Visit the Changelog</span></p></a>

	</div>


