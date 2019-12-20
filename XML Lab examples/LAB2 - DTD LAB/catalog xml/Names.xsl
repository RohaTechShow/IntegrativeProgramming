<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
  <xsl:template match="/">
  <html>
  <body>
  <xsl:apply-templates select="Names"/>
  <xsl:apply-templates select="Names/name"/>
  </body>
    </html>
  </xsl:template>
  <xsl:template match="Names">
  <h3>Greeting for <xsl:value-of select="count(name)"/> Peoples</h3>
  </xsl:template>
  <xsl:template match="name">
  <b> Hi <xsl:value-of select="concat(fname, lname)"/>. Welcome to web developement tutorial</b><br/>
  </xsl:template>
</xsl:stylesheet>
