<?xml version="1.0" encoding="utf-8"?> 
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0" >
	<xsl:output method="xml" version="1.0" omit-xml-declaration="yes" indent="yes" media-type="text/html"/>
	
	<xsl:template match="/">
		<xsl:for-each select="rss/channel/item">
			<a href='{link}'> <xsl:value-of select="title"/></a>
			<br></br>
		</xsl:for-each>
	</xsl:template>

</xsl:stylesheet>

