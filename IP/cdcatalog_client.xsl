<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
<xsl:template match="/">
<h2 style="text-align:center">About us</h2>
<table style="margin-left: auto;
    margin-right: auto;" border="1">
<tr bgcolor="#222222">
<th style="text-align:center; color:floralwhite;" width="200px" height="30px">Name</th>
<th style="text-align:center; color:floralwhite;" width="200px" height="30px">Roll Number</th>
<th style="text-align:center; color:floralwhite;" width="200px" height="30px">Year</th>
<th style="text-align:center; color:floralwhite;" width="200px" height="30px">Division</th>
<th style="text-align:center; color:floralwhite;" width="200px" height="30px">Batch</th>
</tr>
<xsl:for-each select="catalog/cd">
<tr>
<td style="text-align:center" height="30px">
<xsl:value-of select="title"/>
</td>
<td style="text-align:center" height="30px">
<xsl:value-of select="artist"/>
</td>
<td style="text-align:center" height="30px">
<xsl:value-of select="country"/>
</td>
<td style="text-align:center" height="30px">
<xsl:value-of select="company"/>
</td>
<td style="text-align:center" height="30px">
<xsl:value-of select="price"/>
</td>
</tr>
</xsl:for-each>
<tr>
<td style="text-align:center" height="40px" colspan="5"><strong>The above data is retrieved using XML.</strong></td>
</tr>
</table>
</xsl:template>
</xsl:stylesheet>