import React from "react"
import { Link } from "gatsby"

import Layout from "../components/layout"
import SEO from "../components/seo"

const RecipeListing = () => (
  <Layout>
    <SEO title="Recipe Listing" keywords={[`gatsby`, `application`, `react`]} />
    <h1>Recipe Listing</h1>
    <p>Listings go here!</p>
  </Layout>
)

export default RecipeListing
