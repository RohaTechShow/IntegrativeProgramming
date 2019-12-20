<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
  <xsl:template match="/">
<MyPeople>
  <xsl:apply-templates select="people/person"/>
  </MyPeople>
  </xsl:template>
  <xsl:template match="person">
  <xsl:copy>
  <xsl:attribute name="FirstName"><xsl:value-of select="fname"/></xsl:attribute>  
  <xsl:attribute name="LastName"><xsl:value-of select="lname"/></xsl:attribute>
  </xsl:copy>
  </xsl:template>
</xsl:stylesheet>
